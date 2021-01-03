<div class="flex items-center space-x-2">
    <div class="flex flex-col text-center text-grey-900 font-black text-xl">
        <div class="border-b-2 border-black">{{ $progress }}</div>
        <div>{{ $total }}</div>
    </div>
    <div class="shadow-md rounded-lg border-2 border-grey-900 h-16 flex-grow bg-transparent">
        <div class="progress rounded-lg bg-red-900 h-full border-r border-red-900" style="width:{{ ($progress / $total) * 100 }}%"></div>
    </div>
</div>

