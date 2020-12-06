<?php

namespace App\Http\Controllers\Web\Auth;

use App\Helpers\Functions;
use App\Http\Controllers\Web\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    /**
     * Display the form to request a password reset link.
     *
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('Web.auth.forget_password');
    }
    /**
     * Validate the email for the given request.
     *
     * @param Request $request
     * @return void
     */
    protected function validateEmail(Request $request)
    {
        $request->validate(['mobile' => 'required|exists:users,mobile']);
    }

    /**
     * Get the needed authentication credentials from the request.
     *
     * @param Request $request
     * @return array
     */
    protected function credentials(Request $request): array
    {
        return $request->only('mobile');
    }

    /**
     * Get the response for a failed password reset link.
     *
     * @param Request $request
     * @param string $response
     * @return RedirectResponse
     *
     * @throws ValidationException
     */
    protected function sendResetLinkFailedResponse(Request $request, string $response): RedirectResponse
    {
        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                'mobile' => [trans($response)],
            ]);
        }

        return back()
            ->withInput($request->only('mobile'))
            ->withErrors(['mobile' => trans($response)]);
    }

    /**
     * Send a reset link to the given user.
     *
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     * @throws ValidationException
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);
        $User = User::where('mobile',$request->mobile)->first();
        try {
            Functions::SendForget($User);
            return $this->sendResetLinkResponse($request, __('auth.code_sent'));
        }catch (\Exception $exception){
            return $this->sendResetLinkFailedResponse($request, $exception->getMessage());
        }
    }

}
