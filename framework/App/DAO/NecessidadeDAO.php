<?php

namespace App\DAO;

use App\Model\NecessidadesModel;
use PDO;

class NecessidadesDAO extends Conexao
{
    public function insert(NecessidadesModel $n)
    {
        $sql = "INSERT INTO necessidades (
                nec_titulo, nec_descricao, nec_data, nec_prazo, nec_status, 
                nec_avaliacao, nec_avaliacao_coment, nec_localizacao, nec_relatorio
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->getConn()->prepare($sql);
        return $stmt->execute([
            $n->nec_titulo,
            $n->nec_descricao,
            $n->nec_data,
            $n->nec_prazo,
            $n->nec_status,
            $n->nec_avaliacao,
            $n->nec_avaliacao_coment,
            $n->nec_localizacao,
            $n->nec_relatorio
        ]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM necessidades ORDER BY nec_id DESC";
        $stmt = $this->getConn()->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM necessidades WHERE nec_id = ?";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateStatus($id, $status, $relatorio = null)
    {
        $sql = "UPDATE necessidades 
                SET nec_status = ?, nec_relatorio = ?
                WHERE nec_id = ?";

        $stmt = $this->getConn()->prepare($sql);
        return $stmt->execute([$status, $relatorio, $id]);
    }
}
