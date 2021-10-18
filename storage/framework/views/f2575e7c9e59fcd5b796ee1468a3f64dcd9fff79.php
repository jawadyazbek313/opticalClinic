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
                          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                          <?php if($user->id !== auth()->id()): ?>
                          <?php
                              $not_seen= App\Models\Message::where('user_id',$user->id)->where('receiver_id',auth()->id())->where('is_seen',false)->get() ?? null

                          ?>
                                <a wire:click="getUser(<?php echo e($user->id); ?>)"  class="text-dark link">
                                    <li class="pointerme list-group-item list-group-item-action border-0 text-left">
                                        <img class="img-fluid avatar" src="<?php echo e(asset('images/profile.webp')); ?>">
                                        <?php if($user->is_online==true): ?>

                                         <i class="fa fa-circle text-success online-icon">
                                            <?php endif; ?>
                                             
                                         </i> <?php echo e($user->name); ?>

                                       <?php if(filled($not_seen)): ?>
                                            <div class="badge badge-success rounded"> <?php echo e($not_seen->count()); ?> </div>
                                            <?php endif; ?>
                                    </li>
                                </a>
                                <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
  
        <div class="col-md-8 col-sm-9 p-0">
            <div class="card">
                <div class="card-header bg-light">
                     <?php if(isset($sender)): ?> <?php echo e($sender->name); ?>   <?php endif; ?>
                </div>
                <div class="card-body message-box" wire:poll="mountdata">
                   <?php if(filled($allmessages)): ?>
                     <?php $__currentLoopData = $allmessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mgs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div data-msg-id="" class="single-message <?php if($mgs->user_id == auth()->id()): ?> sent <?php else: ?> received <?php endif; ?>">
                                <?php if($mgs->user_id == auth()->id()): ?>
                             <span class="mb-4"><?php echo e($mgs->message); ?></span> <br><?php else: ?>
                             <?php echo e($mgs->message); ?><br><?php endif; ?>
                             <?php if($mgs->user_id == auth()->id()): ?>
                              <?php if($mgs->is_seen==false): ?> <small><span class="border-top"> <?php echo e($mgs->created_at); ?> <i class="ml-2 far fa-check-circle"></i></span></small> <?php endif; ?> <?php if($mgs->is_seen==true): ?> <small><span class="border-top"><?php echo e($mgs->created_at); ?> <i class="ml-2 fas fa-check-circle"></i></span></small> <?php endif; ?> <?php endif; ?>
                            </div>  

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        
                </div>
                 
                <div class="card-footer bg-light">
                    <form wire:submit.prevent="SendMessage">
                        <div class="row">
                            <div class="col-md-8">
                                <input wire:model="message" class="form-control input shadow-none w-100 d-inline-block" placeholder="Type a message" required>
                            </div>

                            <div class="col-md-4 marginTopResponsive">
                                <button type="submit" class="btn btn-primary d-inline-block w-100"><i class="far fa-paper-plane"></i> Send</button>
                            </div>
                        </div>
                    </form>
                </div>
             
            </div>
        </div>
    </div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\opticalClinic\resources\views/livewire/messages.blade.php ENDPATH**/ ?>