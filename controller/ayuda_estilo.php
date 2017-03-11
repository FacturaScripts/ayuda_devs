<?php

/*
 * This file is part of FacturaScripts
 * Copyright (C) 2017  Francesc Pineda Segarra  shawe.ewahs@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class ayuda_estilo extends fs_controller {

   public function __construct() {
      parent::__construct(__CLASS__, 'Estilo', 'Documentación', FALSE, TRUE);
      $this->shared_extensions();
   }

   protected function private_core() {

   }

   protected function public_core() {

   }

   public function shared_extensions(){
      $extensiones = array(
          array(
              'name' => 'ayuda_highlight_js',
              'page_from' => __CLASS__,
              'page_to' => __CLASS__,
              'type' => 'head',
              'text' => '<script src="' . FS_PATH . 'plugins/ayuda_devs/view/js/highlight.pack.js" type="text/javascript"></script>',
              'params' => ''
          ),
          array(
              'name' => 'docs_min_js',
              'page_from' => __CLASS__,
              'page_to' => __CLASS__,
              'type' => 'head',
              'text' => '<script src="' . FS_PATH . 'plugins/ayuda_devs/view/js/docs.min.js" type="text/javascript"></script>',
              'params' => ''
          ),
          array(
              'name' => 'idea_min_css',
              'page_from' => __CLASS__,
              'page_to' => __CLASS__,
              'type' => 'head',
              'text' => '<link rel="stylesheet" type="text/css" media="screen" href="' . FS_PATH . 'plugins/ayuda_devs/view/css/idea.min.css"/>',
              'params' => ''
          ),
          array(
              'name' => 'docs_min_css',
              'page_from' => __CLASS__,
              'page_to' => __CLASS__,
              'type' => 'head',
              'text' => '<link  rel="stylesheet" type="text/css" media="screen" href="' . FS_PATH . 'plugins/ayuda_devs/view/css/docs.min.css"/>',
              'params' => ''
          ),
          array(
              'name' => 'affix_css',
              'page_from' => __CLASS__,
              'page_to' => __CLASS__,
              'type' => 'head',
              'text' => '<link  rel="stylesheet" type="text/css" media="screen" href="' . FS_PATH . 'plugins/ayuda_devs/view/css/affix.css"/>',
              'params' => ''
          )
      );
      foreach ($extensiones as $ext) {
         $fsext0 = new fs_extension($ext);
         if (!$fsext0->save()) {
            $this->new_error_msg('Imposible guardar los datos de la extensión ' . $ext['name'] . '.');
         }
      }
   }
}
