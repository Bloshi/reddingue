<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Contracts\Routing\Middleware;

    class AdminLog implements Middleware
    {
        public function __construct()
        {
            $this->middleware('AdminLog');
        }
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next)
        {
            if ( isset( session('adminLogged') ) ) {
                if ( session('adminLogged') === true ) {
                    return $next($request);
                }
            }
            return redirect()->route('admin.index');
        } 
    }
