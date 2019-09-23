<?php

namespace App\Observers;

use App\SecondFeastMember;
use App\Notifications\CreatedMember;
use App\Notifications\ThanksMember;

class SecondFeastMemberObserver
{
    /**
     * Handle the second feast member "created" event.
     *
     * @param  \App\SecondFeastMember  $secondFeastMember
     * @return void
     */
    public function created(SecondFeastMember $secondFeastMember)
    {
      $secondFeastMember->notify(new ThanksMember());
      foreach($secondFeastMember->feast->users as $admin){
        $admin->notify(new CreatedMember($secondFeastMember));
      }
    }

    /**
     * Handle the second feast member "updated" event.
     *
     * @param  \App\SecondFeastMember  $secondFeastMember
     * @return void
     */
    public function updated(SecondFeastMember $secondFeastMember)
    {
        //
    }

    /**
     * Handle the second feast member "deleted" event.
     *
     * @param  \App\SecondFeastMember  $secondFeastMember
     * @return void
     */
    public function deleted(SecondFeastMember $secondFeastMember)
    {
        //
    }

    /**
     * Handle the second feast member "restored" event.
     *
     * @param  \App\SecondFeastMember  $secondFeastMember
     * @return void
     */
    public function restored(SecondFeastMember $secondFeastMember)
    {
        //
    }

    /**
     * Handle the second feast member "force deleted" event.
     *
     * @param  \App\SecondFeastMember  $secondFeastMember
     * @return void
     */
    public function forceDeleted(SecondFeastMember $secondFeastMember)
    {
        //
    }
}
