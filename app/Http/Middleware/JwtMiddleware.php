<?php
namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Exception;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;

class JwtMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
      $token = $request->header('Authorization');

        if (!$token) {
            // Unauthorized response if token not there
            return response()->json([
                'error' => 'Token not provided.',
            ], 401);
        }
        try {
            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
        } catch (ExpiredException $e) {
            return response()->json([
                'error' => 'Provided token is expired.',
            ], 400);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'An error while decoding token.',
            ], 400);
        }
        $user = User::find($credentials->sub);

        if($user && in_array($user->role,$roles)){
            $request->auth = $user;
            return $next($request);
        }

        return response()->json([
            'error' => 'You dont have permission.',
        ], 401);
    }
}
