<div {{ $attributes->merge(['class' => 'flex me-0 sm:me-1 lg:me-2']) }}>
    @if($selectable)
        @if($selected)
            <a class="grow inline-flex items-center h-16 px-3 sm:px-0.5 md:px-1 lg:px-2 pt-1 bold
                    text-sm font-bold text-primary-gray dark:text-gray-50
                    border-b-4 border-primary-gray dark:border-indigo-500
                    focus:outline-none focus:border-primary-gray dark:focus:border-indigo-300"
                href="{{ $href }}">
                {{ $content }}
            </a>
        @else
            <a class="grow inline-flex items-center h-16 px-3 sm:px-0.5 md:px-1 lg:px-2 pt-1
                    text-sm font-medium text-primary-gray dark:text-gray-400
                    border-b-4 border-transparent
                    hover:border-gray-300 dark:hover:border-gray-700 hover:text-primary-gray dark:hover:text-gray-300
                    focus:outline-none focus:border-primary-gray dark:focus:border-gray-700 focus:text-secondary-gray dark:focus:text-gray-300
                    hover:bg-primary-red dark:hover:bg-gray-800 sm:hover:bg-primary-red dark:sm:hover:bg-gray-800"
                href="{{ $href }}">
                {{ $content }}
            </a>
        @endif
    @else
        <a class="grow inline-flex items-center h-16 px-3 sm:px-0.5 md:px-1 lg:px-2 pt-1
                text-sm font-medium text-primary-gray dark:text-gray-400
                border-b-2 border-transparent
                hover:text-primary-gray dark:hover:text-gray-300
                focus:outline-none  focus:text-primary-gray dark:focus:text-gray-300
                hover:bg-gray-100 dark:hover:bg-gray-800 sm:hover:bg-white dark:sm:hover:bg-gray-900"
            href="{{ $href }}">
            {{ $content }}
        </a>
    @endif
</div>
