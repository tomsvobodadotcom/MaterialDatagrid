<?php

namespace TS\MaterialDatagrid;

/**
 * Materialized Ublaboo's Datagrid
 *
 * @author Tom Svoboda
 */
class MaterialDatagrid extends \Ublaboo\DataGrid\DataGrid {

    public function __construct() {
        parent::__construct();
        $this->useHappyComponents(FALSE);
        $this->setTemplateFile(__DIR__ . "/templates/datagrid.latte");
    }

    public function getPaginator() {
        $paginator = parent::getPaginator();
        if ($paginator) {
            $paginator->setTemplateFile(__DIR__ . "/templates/paginator.latte");
        }
        return $paginator;
    }

    public function addColumnStatus($key, $name, $column = null) {
        $columnStatus = parent::addColumnStatus($key, $name, $column);
        $columnStatus->setTemplate(__DIR__ . "/templates/column_status.latte");
        return $columnStatus;
    }

}
