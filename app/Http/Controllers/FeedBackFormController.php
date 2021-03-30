<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFeedbackRequest;
use App\Models\FeedBack;

class FeedBackFormController extends Controller
{
    protected $feedback;

    public function __construct(FeedBack $feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(StoreFeedbackRequest $request)
    {
        $this->feedback->SendMailToAdmin($request);

        return back()->with('message', "We will contact you shortly!");
    }

}
