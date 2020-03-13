

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-green-haze">
            <span class="caption-subject bold uppercase">Alumnos disponibles</span>
        </div>
        <div class="actions">
            <!--
            <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                <i class="icon-wrench"></i>
            </a>
            -->
            <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                <i class="icon-trash"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body form" style="height: auto;">
        <form role="form" class="form-horizontal">
            <div class="form-body">
                <div class="form-group form-md-line-input" v-for="dato in datos">
                    
                    <label  class="col-md-12 control-label-1" 
                            for="form_control_1">
                        Alumnos {{dato.grado}} {{dato.seccion}} 
                    </label>
                    <div class="col-md-10">
                        <div class="md-checkbox-inline" v-for="alumno in dato.alumnos">
                            <div class="md-checkbox">
                                <input  type="checkbox" 
                                        class="md-check"
                                        v-bind:id="alumno.id"
                                        v-bind:value="alumno.id"
                                        v-model="ids"
                                        >
                                <label :for="alumno.id">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    {{alumno.nombre}} ({{alumno.codigo}})
                                </label>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="button" class="btn blue" @click="post_asistencias()">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

