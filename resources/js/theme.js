require('./bootstrap');

window.$ = window.jQuery = require('jquery');

$(document).ready(() => {

    let chart = document.querySelector('.chart')

    let changeSize = (canvas, chart) => {
        if (canvas.width  < chart.offsetWidth)
            canvas.width  = chart.offsetWidth
        if (canvas.height < chart.offsetHeight)
            canvas.height = chart.offsetHeight
    }

    let canvas = document.querySelector('canvas')

    let position = null

    let points = $('.point')

    let margin = 70

    let takePosition = (points) =>
    {
        points.each(function(index){

            position = Math.floor($(this).attr('data-point')) / 10

            $(this).css({
                left: index * margin,
            })

            $(this).next().css({
                left: index * margin,
            })

            $(this).children().css({
                top: position+'px'
            })
        })

    }

    takePosition(points)

    changeSize(canvas, chart)

    $(window).on('resize',() => {
        changeSize(canvas, chart)
    })

    let draw = (canvas, points) => {
        let ctx = canvas.getContext('2d')

        let gradient = ctx.createLinearGradient(0,125, 0,0)
        gradient.addColorStop('0', '#6B9EFF')
        gradient.addColorStop('1.0', '#FF90C6')

        ctx.lineWidth = 3

        ctx.beginPath()

        points.each(function (index){
            position = Math.floor($(this).attr('data-point')) / 10
            if (index < 0)
                ctx.moveTo(0, position)
            else
                ctx.lineTo(index * margin, position)
        })

        ctx.strokeStyle = gradient

        ctx.stroke()
    }

    draw(canvas, points)

})
