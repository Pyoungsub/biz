<x-app-layout>
    
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="p-4 md:p-8 flex flex-col md:flex-row md:space-x-6 max-w-7xl mx-auto">
  <!-- 구독/결제 정보 -->
  <div class="md:w-1/3 w-full mb-6 md:mb-0">
    <div class="bg-white rounded-2xl shadow p-6 flex flex-col space-y-4">
      <h2 class="text-2xl font-bold text-gray-800">구독/결제 정보</h2>
      <p class="text-gray-500 text-sm">현재 이용 중인 플랜과 시작/만료일을 확인하고 연장할 수 있습니다.</p>

      <div class="flex flex-col space-y-4 mt-4">
        {{--
            @foreach($subscriptions as $sub)
        <div class="bg-gray-50 p-4 rounded-xl shadow-sm flex flex-col space-y-2">
          <div class="flex justify-between items-center">
            <h3 class="text-gray-800 font-medium">{{$sub->plan_name}}</h3>
            <div class="text-blue-600 font-semibold">￦{{number_format($sub->amount)}}</div>
          </div>
          <p class="text-gray-500 text-sm">
            시작일: {{$sub->start_date->format('Y-m-d')}} | 만료일: {{$sub->end_date->format('Y-m-d')}}
          </p>
          <button wire:click="renewPlan({{$sub->id}})"
                  class="bg-blue-600 text-white w-full py-2 rounded-xl font-semibold hover:bg-blue-700 transition text-sm">
            연장
          </button>
        </div>
        @endforeach
        --}}
        
      </div>

      <div class="mt-4 flex items-center justify-center gap-2">
        <x-sla />
        <x-refund-policy />    
      </div>
    </div>
  </div>

  <!-- 알림 & 공지 -->
  <div class="md:w-2/3 w-full">
    <div class="bg-white rounded-2xl shadow p-6 flex flex-col space-y-4">
      <h3 class="text-2xl font-bold text-gray-800">알림 & 공지</h3>
      <div class="overflow-y-auto max-h-[60vh] space-y-3">
        {{--
            @foreach($notifications as $notification)
        <div class="flex items-start justify-between bg-gray-50 rounded-xl p-4 hover:bg-gray-100 transition">
          <div class="flex items-start space-x-3">
            @if(!$notification->read)
            <span class="w-3 h-3 bg-blue-500 rounded-full mt-1 flex-shrink-0"></span>
            @else
            <span class="w-3 h-3 bg-gray-300 rounded-full mt-1 flex-shrink-0"></span>
            @endif
            <div>
              <p class="text-gray-800 font-medium">{{$notification->title}}</p>
              <p class="text-gray-500 text-sm">{{$notification->created_at->format('Y-m-d H:i')}}</p>
            </div>
          </div>
          @if(!$notification->read)
          <button wire:click="markAsRead({{$notification->id}})" class="text-gray-400 hover:text-gray-600 text-sm">
            읽음 처리
          </button>
          @endif
        </div>
        @endforeach
        --}}
        

        <div class="text-center mt-2">
          <button wire:click="loadMore" class="text-blue-600 hover:underline text-sm">더 보기</button>
        </div>

      </div>
    </div>
  </div>
</div>
</x-app-layout>
