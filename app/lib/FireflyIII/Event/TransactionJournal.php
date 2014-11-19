<?php
/**
 * Created by PhpStorm.
 * User: sander
 * Date: 19/11/14
 * Time: 21:11
 */

namespace FireflyIII\Event;


use Illuminate\Events\Dispatcher;

class TransactionJournal
{

    public function store(\TransactionJournal $journal, $id = 0)
    {
        /** @var \FireflyIII\Database\Recurring $repository */
        $repository = \App::make('FireflyIII\Database\Recurring');
        $set        = $repository->get();

        /** @var \RecurringTransaction $entry */
        foreach ($set as $entry) {
            $repository->scan($entry, $journal);
        }
    }

    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        // triggers when others are updated.
        $events->listen('transactionJournal.store', 'FireflyIII\Event\TransactionJournal@store');
        $events->listen('transactionJournal.update', 'FireflyIII\Event\TransactionJournal@update');
    }

    public function update(\TransactionJournal $journal)
    {
        /** @var \FireflyIII\Database\Recurring $repository */
        $repository = \App::make('FireflyIII\Database\Recurring');
        $set        = $repository->get();

        /** @var \RecurringTransaction $entry */
        foreach ($set as $entry) {
            $repository->scan($entry, $journal);
        }
    }
} 