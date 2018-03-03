
{% if page.total_pages > 2 %}
    <div class="paginators">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {% if page.current < 2 %}
                    <li class="page-item disabled">
                        <a class="page-link" href="?page={{ page.before}}" aria-label="Next">
                            <span aria-hidden="true">&laquo;</span>

                        </a>
                    </li>
                {% else%}
                    <li class="page-item">
                        <a class="page-link" href="?page={{ page.before}}" aria-label="Next">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                {% endif %}
                {% if page.current > 2 and page.total_pages > 3%}
                    <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                {% endif %}
                {% if page.current > 3 and page.total_pages > 4%}
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                {% endif %}

                {% if page.current < 3 %}
                    <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                    <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
                {% else %}
                    {% if page.current == page.last  %}
                        <li class="page-item"><a class="page-link" href="?page={{ page.before -1}}">{{ page.before -1}}</a></li>
                        <li class="page-item"><a class="page-link" href="?page={{ page.before }}">{{ page.before }}</a></li>
                        <li class="page-item"><a class="page-link" href="?page={{ page.last}}">{{ page.last}}</a></li>
                    {% else %}
                        <li class="page-item"><a class="page-link" href="?page={{ page.before }}">{{ page.before }}</a></li>
                        <li class="page-item"><a class="page-link" href="?page={{ page.current }}">{{ page.current}}</a></li>
                        <li class="page-item"><a class="page-link" href="?page={{ page.next}}">{{ page.next}}</a></li>
                    {% endif %}
                {% endif %}
                {% if page.current < page.last - 2 and page.total_pages > 4%}
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                {% elseif  page.current == page.last - 2 and page.total_pages > 3%}
                    <li class="page-item"><a class="page-link" href="?page={{ page.last}}">{{ page.last}}</a></li>
                {% endif %}
                {% if page.current < page.last - 2 and page.total_pages > 3%}
                    <li class="page-item"><a class="page-link" href="?page={{ page.last}}">{{ page.last}}</a></li>
                {% endif %}
                {% if page.current >= page.last - 2 %}
                <li class="page-item disabled">
                    <a class="page-link" href="?page={{ page.next}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                {% else%}
                <li class="page-item">
                    <a class="page-link" href="?page={{ page.next}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                {% endif %}
            </ul>
        </nav>
    </div>
{% elseif page.total_pages == 2 %}
    <div class="paginators">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="/shop?page={{ page.before }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="/shop">1</a></li>
                <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                <li class="page-item disabled">
                    <a class="page-link" href="/shop?page={{ page.next}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
{% endif %}

<script>
    $(function () {
        $(' .paginators a:not(:last):not(:first)').each(function () {
            var location = window.location.href;
            var link = this.href;

            if(location == link) {
                $(this).addClass('active-link');
            }
        });
    });
</script>