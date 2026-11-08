@extends('layouts.app')

    @section('title', 'Feed · MO ')
    @section('description', 'See the latest posts and updates from your MO Social network.')
    @section('activePage', 'home')

    @section('content')
      <main @class(['col-12 col-lg-8', 'col-xl-6' => auth()->check(), 'col-xl-9' => auth()->guest()]) id="main">
        <h1 class="visually-hidden">Your feed</h1>

        @auth
          <section class="card mb-3" aria-labelledby="composerHeading">
            <div class="card-body">
              <h2 class="visually-hidden" id="composerHeading">Create a post</h2>
              <div class="d-flex align-items-center gap-2">
                <img class="avatar" src="{{ asset('assets/img/avatar-1.svg') }}" alt="">
                <button class="composer-trigger" type="button" data-bs-toggle="modal" data-bs-target="#createPostModal">
                  What's on your mind, {{ str(auth()->user()->name)->before(' ') }}?
                </button>
              </div>
              <hr class="my-3">
              <div class="d-flex flex-wrap gap-1">
                <button class="btn btn-light flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#createPostModal">
                  <i class="bi bi-image text-success me-1" aria-hidden="true"></i>Photo
                </button>
                <button class="btn btn-light flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#createPostModal">
                  <i class="bi bi-camera-video text-danger me-1" aria-hidden="true"></i>Video
                </button>
              </div>
            </div>
          </section>
        @endauth

        <div class="d-flex align-items-center justify-content-between mb-2 px-1">
          <h2 class="h6 text-secondary mb-0">Your feed</h2>
          <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-sliders me-1" aria-hidden="true"></i>Most recent
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
              <li><button class="dropdown-item active" type="button">Most recent</button></li>
              <li><button class="dropdown-item" type="button">Top posts</button></li>
              @auth
                <li><button class="dropdown-item" type="button">Friends only</button></li>
              @endauth
            </ul>
          </div>
        </div>

        @forelse ($posts as $post)
          <x-post :post="$post" />
        @empty
          <section class="card">
            <div class="card-body text-center text-secondary py-5">
              <i class="bi bi-file-post fs-2 d-block mb-2" aria-hidden="true"></i>
              <p class="mb-0">No posts yet.</p>
            </div>
          </section>
        @endforelse
      </main>

      @auth
        <div class="col-xl-3 d-none d-xl-block">
          <div class="sticky-rail pb-3">
            <x-people-you-may-know :user="auth()->user()" />

            <section class="card mb-3" aria-labelledby="birthdaysHeading">
              <div class="card-body d-flex align-items-start gap-3">
                <i class="bi bi-gift fs-3 text-brand" aria-hidden="true"></i>
                <div>
                  <h2 class="h6 mb-1" id="birthdaysHeading">Birthdays</h2>
                  <p class="small text-secondary mb-0">
                    <strong class="text-body">Chahine</strong> and
                    <strong class="text-body">2 others</strong> have birthdays today.
                  </p>
                </div>
              </div>
            </section>

           
          </div>
        </div>
      @endauth
    @endsection

