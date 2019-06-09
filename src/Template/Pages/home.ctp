        <div class="row">
          <section class='col-xs-12 col-sm-6 col-md-6'>
            <section>
              <h2>Prueba de pagina Matrioska</h2>
                <p>For instructions on how to use this application with OpenShift, start by reading the <a href="http://docs.okd.io/latest/dev_guide/templates.html#using-the-quickstart-templates">Developer Guide</a>.</p>

              <h2>Integrantes</h2>

<ol>
  <li>Jemmyfer Rudas Concepción</li>
  <li>Luis Egido</li>
  <li>Noe Zafra</li>
</ol>
                <h3>Introducción</h3>
                <p>En esta parte de OpenShift vamos a implementar y usar los servicios de
                  Openshift Online y Openshift Origin.  El primero mencionado Openshift
                  Online es una nube pública de Red Hat, la plataforma de alojamiento que
                  nos permitirá crear de una manera fácil y sencilla una aplicación. Y Openshift
                  Origin por el contrario es un paquete de instalación local para crear tu propia
                  nube privada que proporcione estos servicios como la versión Online.</p>
                <p>En esta introducción nos vamos a centrar en lo que hace Openshift en
                  su gran mayoría, el auge que tiene esta herramienta para los desarrolladores
                  porque soporta programas binarios para desplegar  aplicaciones Web. Los
                  desarrolladores pueden usar Git y GitHub para desplegar sus aplicaciones Web
                  en los diferentes lenguajes de la plataforma.
                </p>
                <p>OpenShift es una solución que se encarga de mantener los servicios
                  subyacentes a la aplicación y la escalabilidad de la aplicación como
                  se necesite. Permite al desarrollador centrarse en su trabajo de creación
                  y evitar preocuparse del mantenimiento de los servicios.</p>
                <p>Se basa en el uso de contenedores indeterminado atendiendo a las necesidades de
                  cada proyecto, ayuda en la sintonía, unos con otros.</p>
                <pre>
                </pre>
                  <p>
                  </p>

            </section>
          </section>
          <section>
               <?php
                    use Cake\Datasource\ConnectionManager;

                    $hasDB=1;
                    $tableExisted=0;
                    try {
                      $connection = ConnectionManager::get('default');
                    } catch(Exception $e) {
                      $hasDB=0;
                    }
                    if ($hasDB) {
                        try {
                          $connection->execute('create table view_counter (c integer)');
                        } catch (Exception $e) {
                        	$tableExisted=1;
                        }
                        try {
                            if ($tableExisted==0) {
                            	$connection->execute('insert into view_counter values(1)');
                            } else {
                                $connection->execute('update view_counter set c=c+1');
                            }
                            $result=$connection->execute('select * from view_counter')->fetch('assoc');;
                        } catch (Exception $e) {
                            $hasDB=0;
                        }
                    }
                ?>
                <?php if ($hasDB==1) : ?>
                   <span class="code" id="count-value"><?php print_r($result['c']); ?></span>
                   </p>
                <?php else : ?>
                   <span class="code" id="count-value">No database configured</span>
                   </p>
                <?php endif; ?>

          </section>
        </div>
