<li class="z-30 flex-auto text-left">
    <a {{ $attributes->merge(['class'  => 'z-30 flex items-left font-extrabold justify-left w-1/2 px-0 py-2 text-sm mb-0 transition-all ease-in-out border-0 rounded-md cursor-pointer text-slate-900 bg-inherit',
                               'data-tab-target' => "",
                               'role' => "tab" ]) }}>
    {{ $slot }}
    </a>
  </li>