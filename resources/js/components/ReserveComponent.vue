<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        <p>{{ horarios }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
var app2 = new Vue({ el: '#app2',
data: function () {
  return {
    dia_registro: '' + new Date().toLocaleString() + ''
  }
}
})
    export default {
        props:['horarios']
    }
</script>
