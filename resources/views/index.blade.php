@extends('layouts.main')

@section('content')
<div>
    <div class="container px-4 pt-16 mx-auto">
        <!--start popular movies-->
        <div class="popular-movies">
            <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Parasite</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Joker</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="frozen2" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">FrozenII</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sonic.jpg" alt="sonic" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Sonic</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Joker</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sonic.jpg" alt="sonic" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Sonic</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Parasite</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Joker</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="frozen2" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">FrozenII</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Parasite</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end popular movies-->

        <!--start now playing -->
        <div class="now-playing-movies py-24">
            <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Parasite</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Joker</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="frozen2" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">FrozenII</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sonic.jpg" alt="sonic" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Sonic</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Joker</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sonic.jpg" alt="sonic" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Sonic</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Parasite</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Joker</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="frozen2" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">FrozenII</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="mt-2 text-lg hover:text-gray-300">Parasite</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg class="w-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                                </g>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span class="ml-1">Oct 9, 2021</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action,Thriller, Comedy
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end now playing -->
    </div>
</div>
@endsection
