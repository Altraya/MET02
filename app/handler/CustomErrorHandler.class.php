<?php
class CustomErrorHandler {
   public function __invoke($request, $response, $exception) {
        return $response
            ->withStatus(500)
            ->withHeader('Content-Type', 'text/html')
            ->write('Something went wrong!');
   }
}