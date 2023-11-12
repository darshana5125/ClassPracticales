<template>
    <div>
        <FormComponent/>
        <SliderComponent/>
        <DialogComponent />
    </div>
</template>

<script>
import DialogComponent from '@/components/DialogComponent.vue';
import FormComponent from '@/components/FormComponent.vue';
import SliderComponent from '@/components/SliderComponent.vue';

export default {
    components: {
        FormComponent,
        SliderComponent,
        DialogComponent,
    },
}
</script>