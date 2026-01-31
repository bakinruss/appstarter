<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

final class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $roleCode = (string) $session->get('role_code');

        if ($session->get('user_id') && $roleCode === 'admin') {
            return null;
        }

        $accept = $request->getHeaderLine('Accept');
        $path = trim($request->getUri()->getPath(), '/');
        $isApi = str_starts_with($path, 'admin');

        if (str_contains($accept, 'application/json') || $isApi) {
            return service('response')
                ->setStatusCode(403)
                ->setJSON(['error' => 'Недостаточно прав']);
        }

        return redirect()->to('/login');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        return $response;
    }
}
