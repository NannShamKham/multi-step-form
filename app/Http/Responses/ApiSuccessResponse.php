<?php

declare(strict_types=1);

namespace App\Http\Responses;

use Illuminate\Http\Response as HttpResponse;
use Illuminate\Contracts\Support\Responsable;

class ApiSuccessResponse implements Responsable
{
    public function __construct(
        protected mixed $data,
        protected string $message = '',
        protected int $status = HttpResponse::HTTP_OK,
        protected array $headers = [],
    ) {
//        $this->message = str($message)->isEmpty() ? __('messages.success') : $message;
    }

    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.
        return response()->json(
            data: [
                'data' => $this->data,
                'message' => "success",
                'status' => $this->status,
            ],
            status: $this->status,
            headers: $this->headers
        );
    }
}
