<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses">
                    <div class="message-header">
                     <p>
                         {{status.user.name }} said ...
                     </p>
                     <p>
                         {{status.created_at | ago}}
                     </p>
                 </div>


                 <div class="message-body" v-text="status.body">
                    Home
                </div>
            </div>
                <add-to-stream></add-to-stream>

        </div>
    </div>
</div>
</template>

<script>
    import moment from 'moment';
    import Status from '../models/Status';
    import AddToStream from '../components/AddToStream.vue';
    export default {
        components:{ AddToStream },
        data(){
            return {
                statuses: []
            }
        },
        created() {
            Status.all(statuses => this.statuses = statuses);

        },
        filters: {
            ago(date){
                return moment(date).fromNow();
            }
        },
    }
</script>
