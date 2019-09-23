<?php

namespace App\Observers;

use App\FirstFeastMember;
use App\Notifications\CreatedMember;
use App\Notifications\ThanksMember;

class FirstFeastMemberObserver
{
    /**
     * Handle the first feast member "created" event.
     *
     * @param  \App\FirstFeastMember  $firstFeastMember
     * @return void
     */
    public function created(FirstFeastMember $firstFeastMember)
    {
      $firstFeastMember->notify(new ThanksMember());
      foreach($firstFeastMember->feast->users as $admin){
        $admin->notify(new CreatedMember($firstFeastMember));
      }
    }

    /**
     * Handle the first feast member "updated" event.
     *
     * @param  \App\FirstFeastMember  $firstFeastMember
     * @return void
     */
    public function updated(FirstFeastMember $firstFeastMember)
    {
        //
    }

    /**
     * Handle the first feast member "deleted" event.
     *
     * @param  \App\FirstFeastMember  $firstFeastMember
     * @return void
     */
    public function deleted(FirstFeastMember $firstFeastMember)
    {
        //
    }

    /**
     * Handle the first feast member "restored" event.
     *
     * @param  \App\FirstFeastMember  $firstFeastMember
     * @return void
     */
    public function restored(FirstFeastMember $firstFeastMember)
    {
        //
    }

    /**
     * Handle the first feast member "force deleted" event.
     *
     * @param  \App\FirstFeastMember  $firstFeastMember
     * @return void
     */
    public function forceDeleted(FirstFeastMember $firstFeastMember)
    {
        //
    }
}
