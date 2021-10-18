
<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('messages')->html();
} elseif ($_instance->childHasBeenRendered('4UOxPKG')) {
    $componentId = $_instance->getRenderedChildComponentId('4UOxPKG');
    $componentTag = $_instance->getRenderedChildComponentTagName('4UOxPKG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4UOxPKG');
} else {
    $response = \Livewire\Livewire::mount('messages');
    $html = $response->html();
    $_instance->logRenderedChild('4UOxPKG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\opticalClinic\resources\views/chats/chat.blade.php ENDPATH**/ ?>