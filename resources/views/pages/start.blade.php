@extends('layouts.app')
@section('content')
  <h3 class="phasmoFont blur-[0.8px] text-[7rem] mt-8">{{ __('start.title') }}</h3>
  <div class="flex ml-12 mr-8">
    <div class="w-[31%] h-10">
      <div class="bg-main-infobox bg-contain h-[21rem] bg-no-repeat w-full p-3">
        <div class="phasmoFont blur-[0.8px] text-4xl border-b-2 my-0 mx-auto w-3/5 border-[#0d1218]">
          {{ __('start.info.title') }}</div>
        <div class="phasmoFont blur-[0.75px] text-[2rem] leading-9">{!! __('start.info.text') !!}</div>
      </div>
    </div>
    <div class="w-[38%] h-10">
      <x-start-button :message="__('start.select1')" target="/howToPlay" />
      <x-start-button :message="__('start.select2')" target="/quests" />
      <x-start-button :message="__('start.select3')" target="/items" />
      <x-start-button :message="__('start.select4')" target="/ghosts" />
      <x-start-button :message="__('start.select5')" target="/maps" />
      <x-start-button :message="__('start.select6')" target="/" />
    </div>
    <div class="w-[31%] h-10">
      <div class="bg-main-updatebox bg-contain h-[38rem] bg-no-repeat w-full p-3">
        <div class="phasmoFont blur-[0.8px] text-4xl">{{ __('start.update.title') }}</div>
      </div>
    </div>
  </div>
@endsection
