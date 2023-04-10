<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('voyager::seeders.roles.admin'),
            ])->save();
        }

        //  DONACIONES SEDEGES ROLES
        $role = Role::firstOrNew(['name' => 'sedeges_admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('administrador Sedeges'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'sedeges_donacion_responsable']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Responsable de Donacion SEDEGES'),
            ])->save();
        }

        // $role = Role::firstOrNew(['name' => 'sedeges_donacion_view']);
        // if (!$role->exists) {
        //     $role->fill([
        //         'display_name' => __('Ver Stock Donacion SEDEGES'),
        //     ])->save();
        // }




        // FIN DONACIONES SEDEGES

        $role = Role::firstOrNew(['name' => 'almacen_admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Almacen - Administrador de todos los Almacenes'),
            ])->save();
        }
        
        $role = Role::firstOrNew(['name' => 'almacen_subadmin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Almacen - Responsable de almacen "Report"'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'almacen_responsable']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Almacen - Responsable de almacen "Ingreso & Egreso"'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'almacen_subadmin_responsable']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Almacen - Responsable de almacen "Ingreso & Egreso & Report"'),
            ])->save();
        }

        //Rol para las solicitudes de pedido 
        $role = Role::firstOrNew(['name' => 'almacen_solicitud_pedido']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Almacen - Solicitud de Pedidos'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'almacen_solicitud_aprobar']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Almacen - Responsable de Aprobar Las Solicitudes'),
            ])->save();
        }






        
        // $role = Role::firstOrNew(['name' => 'Almacen']);
        // if (!$role->exists) {
        //     $role->fill([
        //         'display_name' => __('Responsable Almacen'),
        //     ])->save();
        // }

        // $role = Role::firstOrNew(['name' => 'Solicitante']);
        // if (!$role->exists) {
        //     $role->fill([
        //         'display_name' => __('Unidades Solicitante'),
        //     ])->save();
        // }

        // $role = Role::firstOrNew(['name' => 'Contrataciones']);
        // if (!$role->exists) {
        //     $role->fill([
        //         'display_name' => __('Contrataciones'),
        //     ])->save();
        // }
    }
}

