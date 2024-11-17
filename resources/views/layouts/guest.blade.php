@props(['title' => '', 'className' => ''])
<x-base-layout :$title :$className>
    <main>
        <div class="container-small {{ $className }} ">
          <div class="flex" style="gap: 5rem">
            <div class="auth-page-form">
              <div class="text-center">
                <a href="/">
                  <img src="/img/logoipsum-265.svg" alt="" />
                </a>
              </div>
              <h1 class="auth-page-title">
                {{ $titleSlot }}
              </h1>
    
              {{ $formSlot }}
                <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                    <x-google-btn/>
                    <x-fb-btn/>
                </div>
                
                {{ $reverseLink }}
             
            </div>
            <div class="auth-page-image">
              <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
    </main>
</x-base-layout>