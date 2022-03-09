<?php

class Model_Interests extends Model {
    public function get_data()
    {
        return array(
            'titles' => array(
                'Книги',
                'Фильмы',
                'Хобби'
            ),
            'texts' => array(
                'Мои любимые книги это "Вино из одуванчиков" и "Книжный вор"',
                'Мои любимые фильмы это "Великий Гетсби" и "Интерстеллар"',
                'Рисование',
                'Волейбол',
                'Готовка'

            ),
            'images' =>array(
                "/source/img/books.png",
                "/source/img/film.png",
                "/source/img/volleyball.png",
                "/source/img/drawing.png",
                "/source/img/spaghetti.png" 
            )
        );
    }
}