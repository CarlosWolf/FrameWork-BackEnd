<?php
    namespace App\Traits;

    use App\Services\MarketAuthenticationService;

    trait AuthorizesMarketRequests{
        public function resolveAuthorization(&$queryParams, &$formParams, &$headers){
            $accessToken = $this->resolveAccessToken();

            $headers['Authorization'] = $accessToken;
        }

        public function resolveAccessToken(){
            $authenticationService = resolve(MarketAuthenticationService::class);
            
            if (auth()->user()) {
                return $authenticationService->getAuthenticatedUserToken();
            }
            
            return $authenticationService->getClientCredentialsToken();
        }
}
