<?php

namespace App\Containers\Customer\Mails;

use App\Containers\Customer\Models\Customer;
use App\Containers\User\Models\User;
use App\Ship\Parents\Mails\Mail;
use Illuminate\Bus\Queueable;

/**
 * Class GetUpCourseMail
 */
class GetUpCourseMail extends Mail
{
    use Queueable;

    protected $customer;

    /**
     * GetUpCourseMail constructor.
     *
     * @param $recipient
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function build()
    {
        return $this->view('customer::GetUpCourseMail')
            ->to($this->customer->email, $this->customer->full_name)
            ->with([
              'customer' => $this->customer
            ]);
    }
}
