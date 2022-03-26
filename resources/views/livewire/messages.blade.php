<div>
    <div class="container-fluid p-0" style="direction: ltr !important">
        <div class="row justify-content-center p-0">

            <div class="col-md-4 col-sm-3 p-0">
                <div class="card">
                    <div class="card-header bg-light">
                        Users
                    </div>
                    <div class="card-body chatbox p-0">
                        <ul class="list-group list-group-flush ">
                            @foreach ($users as $user)

                                @if ($user->id !== auth()->id())
                                    @php
                                        $not_seen =
                                            App\Models\Message::where('user_id', $user->id)
                                                ->where('receiver_id', auth()->id())
                                                ->where('is_seen', false)
                                                ->get() ?? null;
                                        
                                    @endphp
                                    <a wire:click="getUser({{ $user->id }})" class="text-dark link">
                                        <li class="pointerme list-group-item list-group-item-action border-0 text-left">
                                            <img class="img-fluid avatar" src="{{ asset('images/profile.webp') }}">
                                            @if ($user->active != null)
                                                @if ($user->active->last_activity > strtotime(now()->subSecond(30)))
                                                    <i class="fa fa-circle text-success online-icon">
                                                @endif
                                            @endif

                                            </i> {{ $user->name }}
                                            @if (filled($not_seen))
                                                <div class="badge badge-success rounded"> {{ $not_seen->count() }}
                                                </div>
                                            @endif
                                        </li>
                                    </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-9 p-0">
                <div class="card">
                    <div class="card-header bg-light">
                        @if (isset($sender))
                            {{ $sender->name }}
                        @endif
                    </div>
                    <div class="card-body message-box" wire:poll="mountdata">
                        @if (filled($allmessages))
                            @foreach ($allmessages as $mgs)
                                <div data-msg-id=""
                                    class="single-message @if ($mgs->user_id == auth()->id()) sent @else received @endif">
                                    @if ($mgs->user_id == auth()->id())
                                        <span class="mb-4">{{ $mgs->message }}</span> <br>
                                    @else
                                        {{ $mgs->message }}<br>
                                    @endif
                                    @if ($mgs->user_id == auth()->id())
                                        @if ($mgs->is_seen == false)
                                            <small><span class="border-top"> {{ $mgs->updated_at }} <i
                                                        class="ml-2 far fa-check-circle"></i></span></small>
                                            @endif @if ($mgs->is_seen == true)
                                                <small><span class="border-top">{{ $mgs->updated_at }} <i
                                                            class="ml-2 fas fa-check-circle"></i></span></small>
                                            @endif
                                        @endif
                                </div>
                            @endforeach
                        @endif

                    </div>

                    <div class="card-footer bg-light">
                        <form wire:submit.prevent="SendMessage">
                            <div class="row">
                                <div class="col-md-8">
                                    <input wire:model="message"
                                        class="form-control input shadow-none w-100 d-inline-block"
                                        placeholder="Type a message" required>
                                </div>

                                <div class="col-md-4 marginTopResponsive">
                                    <button type="submit" class="btn btn-primary d-inline-block w-100"><i
                                            class="far fa-paper-plane"></i> Send</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
