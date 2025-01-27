<?php
/**
 * ReportGeneratorInterface.php
 * Copyright (c) 2019 fazilc.dev@gmail.com
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

namespace FireflyIII\Generator\Report;

use Carbon\Carbon;
use Illuminate\Support\Collection;

/**
 * Interface ReportGeneratorInterface.
 */
interface ReportGeneratorInterface
{
    /**
     * Generate the report.
     *
     * @return string
     */
    public function generate(): string;

    /**
     * Set the involved accounts.
     *
     * @param Collection $accounts
     *
     * @return ReportGeneratorInterface
     */
    public function setAccounts(Collection $accounts): ReportGeneratorInterface;

    /**
     * Set the involved budgets.
     *
     * @param Collection $budgets
     *
     * @return ReportGeneratorInterface
     */
    public function setBudgets(Collection $budgets): ReportGeneratorInterface;

    /**
     * Set the involved categories.
     *
     * @param Collection $categories
     *
     * @return ReportGeneratorInterface
     */
    public function setCategories(Collection $categories): ReportGeneratorInterface;

    /**
     * Set the end date.
     *
     * @param Carbon $date
     *
     * @return ReportGeneratorInterface
     */
    public function setEndDate(Carbon $date): ReportGeneratorInterface;

    /**
     * Set the expense accounts.
     *
     * @param Collection $expense
     *
     * @return ReportGeneratorInterface
     */
    public function setExpense(Collection $expense): ReportGeneratorInterface;

    /**
     * Set the start date.
     *
     * @param Carbon $date
     *
     * @return ReportGeneratorInterface
     */
    public function setStartDate(Carbon $date): ReportGeneratorInterface;

    /**
     * Set the tags.
     *
     * @param Collection $tags
     *
     * @return ReportGeneratorInterface
     */
    public function setTags(Collection $tags): ReportGeneratorInterface;
}
