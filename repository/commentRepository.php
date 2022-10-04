<?php

namespace repository{

    use model\comment;
    use MongoDB\Driver\Command;

    interface commentRepository{
        function insert(comment $comment):comment;

        function findById(int $id): ?comment;

        function findAll():array;
    }

    class commentRepositoryImpl implements commentRepository{

        public function __construct(private \PDO $connection)
        {
        }

        public function insert(comment $comment): comment
        {
            $sql="insert into comments(email, comment) values (?,?)";
            $statement=$this->connection->prepare($sql);
            $statement->execute([$comment->getEmail(),$comment->getComment()]);

            $id=$this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;
        }

        public function findById(int $id): ?comment
        {
            $sql="select * from comments where id= ?";
            $statement=$this->connection->prepare($sql);
            $statement->execute([$id]);

            if ($row =$statement->fetch() ){
                return new comment(
                    id: $row["id"],email: $row["email"],comment: $row["comment"]
                );
            }else {
                return null;
            }
        }

        public function findAll(): array
        {
            $sql="select * from comments";
            $statement=$this->connection->query($sql);

            $array=[];

            while ($row = $statement->fetch()){
                $array[]=new Comment(
                    id:$row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            }
            return $array;

        }

    }
}