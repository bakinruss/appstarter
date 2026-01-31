<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

final class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if ($session->get('user_id')) {
            return null;
        }

        // Для API возвращаем JSON, для web — редирект на страницу входа
        $accept = $request->getHeaderLine('Accept');
        $path = trim($request->getUri()->getPath(), '/');
        $isApi = str_starts_with($path, 'auth')
            || str_starts_with($path, 'users')
            || str_starts_with($path, 'courses')
            || str_starts_with($path, 'lessons')
            || str_starts_with($path, 'video')
            || str_starts_with($path, 'health');

        if (str_contains($accept, 'application/json') || $isApi) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['error' => 'Требуется авторизация']);
        }

        return redirect()->to('/login');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        return $response;
    }
}
