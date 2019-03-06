<template>
    <div>
        <h4>Notifications</h4>
        <hr>
        <p v-for="m in msg" :key="m">2</p>
    </div> 
</template>
<script>

export default {
    mounted(){
        var pusher = new Pusher('82392777e89d910bbb8f', {
            cluster: 'ap2'
        });
        var channel = pusher.subscribe('muga');
        channel.bind('send-message', function(data) {
            alertify.success(`${data.message.from} say: ${data.message.msg}`);
            this.msg = `${data.message.from} say: ${data.message.msg}`
            console.log(msg)
        });
        console.log('component: mounted')
    },
    data(){
        return{
            msg : []
        }
    }
}
</script>
