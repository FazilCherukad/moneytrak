<?php

/**
 * Cron.php
 * Copyright (c) 2020 fazilc.dev@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\Console\Commands\Tools;

use Carbon\Carbon;
use FireflyIII\Exceptions\FireflyException;
use FireflyIII\Support\Cronjobs\AutoBudgetCronjob;
use FireflyIII\Support\Cronjobs\BillWarningCronjob;
use FireflyIII\Support\Cronjobs\RecurringCronjob;
use Illuminate\Console\Command;
use InvalidArgumentException;
use Log;

/**
 * Class Cron
 *
 * @codeCoverageIgnore
 */
class Cron extends Command
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs all Firefly III cron-job related commands. Configure a cron job according to the official Firefly III documentation.';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'firefly-iii:cron
        {--F|force : Force the cron job(s) to execute.}
        {--date= : Set the date in YYYY-MM-DD to make Firefly III think that\'s the current date.}
        ';

    /**
     * @return int
     */
    public function handle(): int
    {
        $date = null;
        try {
            $date = new Carbon($this->option('date'));
        } catch (InvalidArgumentException $e) {
            $this->error(sprintf('"%s" is not a valid date', $this->option('date')));
        }
        $force = (bool) $this->option('force');

        /*
         * Fire recurring transaction cron job.
         */
        try {
            $this->recurringCronJob($force, $date);
        } catch (FireflyException $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            $this->error($e->getMessage());
        }

        /*
         * Fire auto-budget cron job:
         */
        try {
            $this->autoBudgetCronJob($force, $date);
        } catch (FireflyException $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            $this->error($e->getMessage());
        }

        /*
         * Fire bill warning cron job
         */
        try {
            $this->billWarningCronJob($force, $date);
        } catch (FireflyException $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            $this->error($e->getMessage());
        }

        $this->info('More feedback on the cron jobs can be found in the log files.');

        return 0;
    }

    /**
     * @param bool        $force
     * @param Carbon|null $date
     *
     * @throws FireflyException
     */
    private function recurringCronJob(bool $force, ?Carbon $date): void
    {
        $recurring = new RecurringCronjob;
        $recurring->setForce($force);

        // set date in cron job:
        if (null !== $date) {
            $recurring->setDate($date);
        }

        $recurring->fire();
        if ($recurring->jobErrored) {
            $this->error(sprintf('Error in "create recurring transactions" cron: %s', $recurring->message));
        }
        if ($recurring->jobFired) {
            $this->error(sprintf('"Create recurring transactions" cron fired: %s', $recurring->message));
        }
        if ($recurring->jobSucceeded) {
            $this->error(sprintf('"Create recurring transactions" cron ran with success: %s', $recurring->message));
        }
    }

    /**
     * @param bool        $force
     * @param Carbon|null $date
     *
     */
    private function autoBudgetCronJob(bool $force, ?Carbon $date): void
    {
        $autoBudget = new AutoBudgetCronjob;
        $autoBudget->setForce($force);
        // set date in cron job:
        if (null !== $date) {
            $autoBudget->setDate($date);
        }

        $autoBudget->fire();

        if ($autoBudget->jobErrored) {
            $this->error(sprintf('Error in "create auto budgets" cron: %s', $autoBudget->message));
        }
        if ($autoBudget->jobFired) {
            $this->error(sprintf('"Create auto budgets" cron fired: %s', $autoBudget->message));
        }
        if ($autoBudget->jobSucceeded) {
            $this->error(sprintf('"Create auto budgets" cron ran with success: %s', $autoBudget->message));
        }

    }

    /**
     * @param bool        $force
     * @param Carbon|null $date
     * @throws FireflyException
     */
    private function billWarningCronJob(bool $force, ?Carbon $date): void
    {
        $autoBudget = new BillWarningCronjob;
        $autoBudget->setForce($force);
        // set date in cron job:
        if (null !== $date) {
            $autoBudget->setDate($date);
        }

        $autoBudget->fire();

        if ($autoBudget->jobErrored) {
            $this->error(sprintf('Error in "bill warnings" cron: %s', $autoBudget->message));
        }
        if ($autoBudget->jobFired) {
            $this->error(sprintf('"Send bill warnings" cron fired: %s', $autoBudget->message));
        }
        if ($autoBudget->jobSucceeded) {
            $this->error(sprintf('"Send bill warnings" cron ran with success: %s', $autoBudget->message));
        }

    }
}
