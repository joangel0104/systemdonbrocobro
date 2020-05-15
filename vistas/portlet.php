

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-green-haze">
            <span class="caption-subject bold uppercase">Alumnos disponibles</span>
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
                <div class="12u$">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="button" class="btn blue" @click="post_asistencias()">Cargar Lista</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

