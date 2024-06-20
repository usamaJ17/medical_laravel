@props(['messages'])

@if ($messages)
    <div class="help-block"><ul role="alert">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul></div>
@endif