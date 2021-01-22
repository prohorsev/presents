<template>
    <div class="catalog container pt50 pb50">
        <h1 class="catalog__title fs36 mb30">Выбрать подарок</h1>

<!--        <form class="catalog__search search mb30 d-flex" role="search">
            <label for="search" />
            <input type="text" id="search" name="search" class="fs18 tblack pt16 pb16 pl20" placeholder="Найти подарок">
            <button class="d-flex aic jcc">
&lt;!&ndash;                <svg>&ndash;&gt;
&lt;!&ndash;                    <use xlink:href="../../icons/sprite.svg#search"></use>&ndash;&gt;
&lt;!&ndash;                </svg>&ndash;&gt;
            </button>
        </form>

        <div class="catalog__category category">
            <h3 class="fs24 mb15">Категории</h3>
            <div class="category__box d-flex flexw mb30">

                <ul class="category__item">
                    <li
                        class="category__list"
                        v-for="(category, i) in categories"
                        :key="i"
                    >
                        <a href="#" class="category__link">{{ category.name }}</a>
                    </li>
                </ul>

            </div>
        </div>-->

        <div class="gift-item__center">
            <div class="catalog__gift-item gift-item">

                <div class="gift-item__card"
                     v-for="(item, i) in products"
                     :key="i">
                    <div class="gift-item__image mb15">
                        <img src="http://presents/images/catalog/no-photo.png" alt="item.image">
                    </div>
                    <div class="gift-item__text">
                        <h4 class="gift-item__title mb15">{{ item.title }}</h4>
                        <p class="gift-item__desc mb15">{{ item.description }}</p>

                    </div>
                    <div class="gift-item__link">
                        <a href="#" class="d-flex aic">Подробнее<svg class="ml15"><use xlink:href="http://presents/icons/sprite.svg#arrow-link"></use></svg></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: ()=>({
        categories: [
            {
                id: 1,
                name: 'Все подарки',
                slick: 'all-gifts'
            },
            {
                id: 2,
                name: 'Книги',
                slick: 'books'
            },
            {
                id: 3,
                name: 'Электроника',
                slick: 'electronics'
            },
            {
                id: 4,
                name: 'Игрушки',
                slick: 'toys'
            },
            {
                id: 5,
                name: 'Спорт',
                slick: 'sport'
            },
        ],
        products: [
            {
                id: 1,
                image: 'no-photo.png',
                title: 'Название подарка 1',
                description: 'Краткое описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                category: 'books',
                link: '#'
            },
            {
                id: 2,
                image: 'no-photo.png',
                title: 'Название подарка 2',
                description: 'Краткое описание',
                category: 'toys',
                link: '#'
            },
            {
                id: 3,
                image: 'no-photo.png',
                title: 'Название подарка 3',
                description: 'Краткое описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                category: 'books',
                link: '#'
            },
            {
                id: 4,
                image: 'no-photo.png',
                title: 'Название подарка 4',
                description: 'Краткое описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                category: 'electronics',
                link: '#'
            },
        ],
    }),

    computed: {

    }
}
</script>

<style lang="scss">

.search {
    background: #EFEFEF;
    border-radius: 20px;
    width: 100%;
    & input {
        background: transparent;
        flex: 1;
        min-width: 150px;
        &::placeholder {
            color: #BDBDBD;
        }
    }
    & button {
        background: transparent;
        width: 50px;
        border-top-right-radius: inherit;
        border-bottom-right-radius: inherit;
        & svg {
            fill: #BDBDBD;
            width: 20px;
            height: 20px;
        }
        &:hover {
            background: #6AA4FB;
            & svg {
                fill: #FFFFFF;
            }
        }
    }
}

.category {
    &__box {
        font-size: 18px;
        @media (max-width: 767px) {
            flex-direction: column;
        }
    }
    &__item + &__item {
        margin-left: 50px;
        @media (max-width: 767px) {
            margin-left: 0;
        }
    }
    &__list + &__list {
        margin-top: 7px;
    }
    &__link {
        color: #828282;
        display: inline-block;
        &:hover, &:active {
            color: #6AA4FB;
            &:after {
                width: 100%;
            }
        }
        &:after {
            display: block;
            content: '';
            margin-top: 3px;
            width: 0;
            height: 2px;
            background-color: #6AA4FB;
            transition: width .3s;
        }
    }

}

.gift-item {
    display: flex;
    margin: 0 -20px;
    max-width: 300px;
    flex-wrap: wrap;
    @media (min-width: 768px) {
        max-width: 600px;
    }
    @media (min-width: 992px) {
        max-width: 960px;
    }
    &__center {
        display: flex;
        justify-content: center;
    }

    &__card {
        background: #FFFFFF;
        border-radius: 10px;
        padding: 25px;
        width: 260px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin: 20px;
        &:hover {
            box-shadow: 0 5px 20px rgba(16, 112, 177, 0.2);
            cursor: pointer;
        }
    }
    &__image {
        width: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    &__text {
        flex-grow: 1;
    }
    &__title {
        font-size: 20px;
        line-height: 120%;
        letter-spacing: 0.05em;
        color: #1D1D1D;
    }
    &__desc {
        font-size: 16px;
        line-height: 120%;
        color: #828282;
        letter-spacing: 0.05em;
    }
    &__link {
        a {
            font-size: 14px;
            line-height: 120%;
            letter-spacing: 0.05em;
            color: #6AA4FB;
        }
        & svg {
            fill: #6AA4FB;
            width: 20px;
            height: 20px;
        }
    }
}
</style>

