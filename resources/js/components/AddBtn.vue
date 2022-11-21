<template>
    <div>
        <div class="form-group" v-for="(input, index) in inputs" :key="index">
            <input type="text" name="medicine[]" class="form-control" />
            <br />
            <span>
                <a
                    href=""
                    @click.prevent="add(index)"
                    v-show="index == inputs.length - 1"
                    class="btn-success btn-sm"
                >
                    <i class="ik ik-plus-circle"></i>
                </a>

                <a
                    href=""
                    @click.prevent="remove(index)"
                    v-show="index || (!index && inputs.length > 1)"
                    class="btn-danger btn-sm"
                >
                    <i class="ik ik-minus-circle"></i>
                </a>
            </span>
        </div>
    </div>
</template>

<script type="text/javascript">
export default {
    data() {
        return {
            inputs: [{}],
        };
    },
    methods: {
        add() {
            this.inputs.push({
                medicine: "",
            });
        },
        remove(index) {
            this.inputs.splice(index, 1);
        },
    },
};
</script>
