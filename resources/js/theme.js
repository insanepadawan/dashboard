require('./bootstrap');

window.$ = window.jQuery = require('jquery');

$(document).ready(() => {

    let chart = document.querySelector('.chart')

    let margin = 70

    let head = 3000

    let width = $(window).width()

    console.log(width)

    if (width <= 1400)
        margin = 55

    if (width <= 1200)
        margin = 45

    let changeSize = (canvas, chart) => {
        if (canvas.width < chart.offsetWidth)
            canvas.width = chart.offsetWidth + 30
        if (canvas.height < chart.offsetHeight)
            canvas.height = $('.line:not(:first-child)').height()
    }

    let canvas = document.querySelector('canvas')

    let position = null

    let points = $('.point')

    let takePosition = (points) => {
        points.each(function (index) {

            position = (head - Math.floor($(this).attr('data-point'))) / 200

            $(this).css({
                left: index * margin,
            })

            $(this).prev().css({
                left: index * margin,
            })

            $(this).children().css({
                top: position + 'rem'
            })
        })

    }

    takePosition(points)

    changeSize(canvas, chart)

    let draw = (canvas, points) => {
        let ctx = canvas.getContext('2d')

        let gradient = ctx.createLinearGradient(0, 150, 0, 0)
        gradient.addColorStop('0', '#6B9EFF')
        gradient.addColorStop('1.0', '#FF90C6')

        ctx.lineWidth = 3

        ctx.beginPath()

        points.each(function (index) {
            position = (head - Math.floor($(this).attr('data-point'))) / 20

            if (index < 0)
                ctx.moveTo(0, position)
            else
                ctx.lineTo(index * margin, position)
        })

        ctx.strokeStyle = gradient

        ctx.stroke()
    }

    draw(canvas, points)

    $(window).on('resize', () => {
        changeSize(canvas, chart)
        takePosition(points)
        draw(canvas, points)
    })
})
