@extends('layouts.app')
@section('content')
  <h3 class="phasmoFont blur-[1px] text-[7rem] mt-8">{{ __('start.title') }}</h3>
  <div class="flex ml-12 mr-8">
    <div class="w-[31%] h-10">
      <div class="bg-main-infobox bg-contain h-[21rem] bg-no-repeat w-full p-3">
        <div class="phasmoFont blur-[0.8px] text-4xl">{{ __('start.info.title') }}</div>
        <div class="phasmoFont blur-[0.75px] text-[2rem] leading-9">{!! __('start.info.text') !!}</div>
      </div>
    </div>
    <div class="w-[38%] h-10">
      <div
        class="bg-button-1 bg-no-repeat bg-contain h-24 w-[31rem] ml-5 mb-4 cursor-default hover:bg-button-1-hover transition-all">
        <div class="phasmoFont blur-[1px] text-[5rem] leading-[6rem] w-[84%] ml-10">{{ __('start.select1') }}</div>
      </div>
      <div
        class="bg-button-1 bg-no-repeat bg-contain h-24 w-[31rem] ml-5 mb-4 cursor-default hover:bg-button-1-hover transition-all">
        <div class="phasmoFont blur-[1px] text-[5rem] leading-[6rem] w-[84%] ml-10">{{ __('start.select2') }}</div>
      </div>
      <div
        class="bg-button-1 bg-no-repeat bg-contain h-24 w-[31rem] ml-5 mb-4 cursor-default hover:bg-button-1-hover transition-all">
        <div class="phasmoFont blur-[1px] text-[5rem] leading-[6rem] w-[84%] ml-10">{{ __('start.select3') }}</div>
      </div>
      <div
        class="bg-button-1 bg-no-repeat bg-contain h-24 w-[31rem] ml-5 mb-4 cursor-default hover:bg-button-1-hover transition-all">
        <div class="phasmoFont blur-[1px] text-[3.7rem] leading-[6rem] w-[84%] ml-10">{{ __('start.select4') }}</div>
      </div>
      <div
        class="bg-button-1 bg-no-repeat bg-contain h-24 w-[31rem] ml-5 mb-4 cursor-default hover:bg-button-1-hover transition-all">
        <div class="phasmoFont blur-[1px] text-[5rem] leading-[6rem] w-[84%] ml-10">{{ __('start.select5') }}</div>
      </div>
      <div
        class="bg-button-1 bg-no-repeat bg-contain h-24 w-[31rem] ml-5 mb-4 cursor-default hover:bg-button-1-hover transition-all">
        <div class="phasmoFont blur-[1px] text-[4.3rem] leading-[6rem] w-[84%] ml-10">{{ __('start.select6') }}</div>
      </div>
    </div>
    <div class="w-[31%] h-10">
      <div class="bg-main-updatebox bg-contain h-[38rem] bg-no-repeat w-full p-3">
        <div class="phasmoFont blur-[0.8px] text-4xl">{{ __('start.update.title') }}</div>
      </div>
    </div>
  </div>
@endsection
