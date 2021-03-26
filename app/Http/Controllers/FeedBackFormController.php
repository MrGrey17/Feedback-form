<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFeedbackRequest;
use App\Models\FeedBack;
use App\Jobs\QueueSenderEmail;

class FeedBackFormController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedbackRequest $request)
    {
        $validatedData = $request->validated();

        $feedback = FeedBack::create($validatedData);

        $queue = new QueueSenderEmail($validatedData);
        $this->dispatch($queue);

        return redirect()
				->back()
				->with('message', "We will contact you shortly!");
    }

}
