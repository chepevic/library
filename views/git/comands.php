<?php require_once("views/template/header.php") ?>
<?php require_once("views/template/aside.php") ?>

<main id="library_content">
   
       <div class="container bg-white py-5">
           <div class="row">
               <div class="col">
                   <h2>Comands</h2>
               </div>
           </div>
          <div class="row">
              <div class="col">
              <ol>
               <li class="pb-2 pl-3"><strong class="text-primary">Git init</strong> -> Iniciar repositorio</li>
               <li class="pb-2 pl-3"><strong class="text-primary">Git add .</strong> -> para adicionar todos los archivos al repositorio temporal</li>
               <li class="pb-2 pl-3"><strong class="text-primary">Git add + nombre archivo</strong> -> adiciona al archivo temporal el archivo seleccionado</li>
               <li class="pb-2 pl-3"><strong class="text-primary">Git commit  -m “mas comentario”</strong> -> agrega el o archivos al repositorio</li>
               <li class="pb-2 pl-3"><strong class="text-primary">Git log - -oneline</strong> -> verifica todos los commits para viajar en el tiempo</li>
               <li class="pb-2 pl-3"><strong class="text-primary">Git reset - -hard "id_commit"</strong> -> viaja a esa version guardada</li>
               <li class="pb-2 pl-3"><strong class="text-primary">Git status -s</strong> -> verificar el estado de mis archivos</li>
               <li class="pb-2 pl-3"><strong class="text-primary">Git push</strong> -> subir los archivos o cambios a github</li>
           </ol>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <h2>Subir Repositorio</h2>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <h2>Crear una página html en github….</h2>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <ol>
                      <li>Documentación-> <a href="https://pages.github.com">https://pages.github.com</a></li>
                      <li>Crear un  repositorio con el nombre de usuario.github.io</li>
                      <li>En settings ir a git hub pages…y seleccionar en el main el root del proyecto</li>
                  </ol>
              </div>
          </div>
       </div>
</main>

<?php require_once("views/template/footer.php") ?>