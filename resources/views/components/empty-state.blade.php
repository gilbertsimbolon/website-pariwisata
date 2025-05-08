<div class="px-4 py-10 text-center">
    <h3 class="text-xl font-semibold">{{ $heading }}</h3>
    <p class="text-sm text-gray-500">{{ $description }}</p>
    @if($action)
    <div class="mt-4">
        {{ $action }}
    </div>
    @endif
</div>