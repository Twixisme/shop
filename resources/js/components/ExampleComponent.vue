<template>
    <div id="content" class="col-sm-12 item-article">
        <div>
            <div class="scroll-container big-container shadow base-padding margin-btn">
                <div class="flex-row no-sidebar">
                    <aside class="flex-ch sidebar"></aside>
                    <section class="flex-ch content">
                        <div class="static-content"><h1>О нас</h1>
                            Первая специализированная сеть гаджетов и аксессуаров "А ты купи" укрепляет позицию надежного
                            информационного источника в сфере IT-технологий. Мы нацелены на эффективное сотрудничество с
                            национальными и региональными средствами массовой информации. Выбирая для заказа именно
                            наш магазин вы обезпечиваете себя качественным обслуживанием, отличными товарами, а так же
                            потресающим настроением.
                            С момента открытия к нам поступило уже <b>{{orders}}</b> заказов от счастливых покупателей <br>
                            <br>
                            Наши ответственные администраторы с удовольствием помогу, Вам, оформить заказ и
                            остатся довольными в выборе именно нашего интернет-магазина с любовью ваш "А ты купи!".<br>
                            <br>
                            <b>Наши контакты:</b><br>
                            e-mail: radionov980705@gmail.com<br>
                            +38 095 375 19 12 <br>
                            <br>
                            Мы рады сотрудничеству с вами!<br>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                orders: this.order
            }
        },
        props: [
            'order',
        ]
    }
</script>
