<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\QueueSenderEmail;

class FeedBack extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function SendMailToAdmin($request)
    {
        $validatedData = $request->validated();

        $feedback = FeedBack::create($validatedData);

        $queue = new QueueSenderEmail($validatedData);

        return dispatch($queue);
    }
}
