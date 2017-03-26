点击此链接激活您的账户: <a href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}"> {{ $link }}</a>
