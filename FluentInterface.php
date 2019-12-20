<?php 

class Sql
{
    private  $fields = [];
    private  $from = [];
    private  $where = [];

    public function select( $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function from( $table,  $alias)
    {
        $this->from[] = $table.' AS '.$alias;

        return $this;
    }

    public function where( $condition)
    {
        $this->where[] = $condition;

        return $this;
    }

    public function __toString()
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}
 $query = (new Sql())
                ->select(['foo', 'bar'])
                ->from('foobar', 'f')
                ->where('f.bar = ?');
 $sql=$query->__toString();
 echo $sql;
