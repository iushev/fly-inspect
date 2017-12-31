import React, { Component } from 'react';
import PropTypes from 'prop-types';

import InfiniteScroll from '../../hoc/InfiniteScroll/InfiniteScroll';
import style from './InfiniteScrollTable.css';

class InfiniteScrollTable extends Component {
    static propTypes = {
        columns: PropTypes.shape({
            header: PropTypes.oneOfType([
                PropTypes.element,
                PropTypes.string,
                PropTypes.func,
            ]),
            className: PropTypes.string,
            style: PropTypes.object,
            headerClassName:  PropTypes.string,
            headerStyle:  PropTypes.object,
            footerClassName:  PropTypes.string,
            footerStyle:  PropTypes.object,
        }),
        data: PropTypes.array,
        hasMore: PropTypes.bool,
        loadMore: PropTypes.func,
    }

    static defaultProps = {
        columns: {},
        data: [],
        hasMore: false,
        loadMore: () => ({}),
    };

    state = {
        resizing: false,
        resized: {},
    }

    columnResizingStart = (event, columnKey) => {
        event.stopPropagation();

        this.setState({
            resizing: {
                columnKey: columnKey,
                width: this.getColumnWidth(columnKey),
                startX: this.getPointerX(event),
            }
        });

        document.addEventListener('mousemove', this.columnResizing);
        document.addEventListener('touchmove', this.columnResizing);

        document.addEventListener('mouseup', this.columnResizingEnd);
        document.addEventListener('touchend', this.columnResizingEnd);
        document.addEventListener('mouseleave', this.columnResizingEnd);
        document.addEventListener('touchcancel', this.columnResizingEnd);
    }

    columnResizing = (event) => {
        event.stopPropagation();

        let pageX = this.getPointerX(event);
        const {
            resizing,
         } = this.state;

        const newWidth = Math.max(
            (resizing.width + pageX - resizing.startX),
            11,
        );

        this.setState({
            resizing: {
                ...resizing,
                startX: pageX,
                width: newWidth,
            },
        });
    }

    columnResizingEnd = (event) => {
        event.stopPropagation();

        document.removeEventListener('mousemove', this.columnResizing);
        document.removeEventListener('touchmove', this.columnResizing);

        document.removeEventListener('mouseup', this.columnResizingEnd);
        document.removeEventListener('touchend', this.columnResizingEnd);
        document.removeEventListener('mouseleave', this.columnResizingEnd);
        document.removeEventListener('touchcancel', this.columnResizingEnd);

        this.setState({
            resizing: false,
            resized: {
                ...this.state.resized,
                [this.state.resizing.columnKey]: this.state.resizing.width,
            },
        });
    }

    getPointerX = (event) => {
        if (event.type.indexOf('touch') === 0) {
			return (event.touches[0] || event.changedTouches[0]).pageX;
		}
        return event.pageX;
    }

    getColumnWidth = (columnKey) => {
        return this.state.resized[columnKey] || this.props.columns[columnKey].width || 100;
    }

    renderHeader(minWidth) {
        return (
            <div
                className={style.header}
                style={{
                    overflow: 'hidden',
                }}
                ref={(header) => { this.header = header; }}
            >
                <div
                    style={{
                        minWidth: minWidth,
                    }}
                >
                    { Object.keys(this.props.columns).map((columnKey) => {
                        const column = this.props.columns[columnKey];
                        let width = this.getColumnWidth(columnKey);
                        let resizerClasses = [style.resizer];
                        if (this.state.resizing && this.state.resizing.columnKey === columnKey) {
                            resizerClasses.push(style.resizing);
                            width = this.state.resizing.width;
                        }
                        return (
                            <div
                                key={columnKey}
                                className={style.headerCell}
                                style={{
                                    ...column.headerStyle || {},
                                    width: width,
                                    maxWidth: width,
                                }}
                            >
                                <div
                                    className={style.headerContent}
                                >
                                    { column.header || columnKey }
                                </div>
                                <div
                                    className={resizerClasses.join(' ')}
                                    onMouseDown={(event) => this.columnResizingStart(event, columnKey)}
                                    onTouchStart={(event) => this.columnResizingStart(event, columnKey)}
                                />
                            </div>
                        );
                    }) }
                </div>
            </div>
        );
    }

    renderBody(minWidth) {
        let rows = null;
        if (this.props.data) {
            rows = this.props.data.map((row) => (
                <div
                    key={row.id}
                    className={style.row}
                    style={{
                        minWidth: minWidth,
                    }}
                >
                    { Object.keys(this.props.columns).map((columnKey) => {
                        const column = this.props.columns[columnKey];
                        const width = this.getColumnWidth(columnKey);
                        return (
                            <div
                                key={columnKey}
                                className={style.bodyCell}
                                style={{
                                    ...column.style || {},
                                    width: width,
                                    maxWidth: width,
                                }}
                            >
                                {row[column.field]}
                            </div>
                        );
                    })}
                </div>
            ));
        }

        return rows;
    }

    renderFooter() {
        return (
            <div style={{
                flex: "0 0 auto",
            }}>
            </div>
        );
    }

    scrollHeader = (event) => {
        if (!this.header) {
            return;
        }
        let scrollLeft = event.target.scrollLeft || document.body.scrollLeft;
        this.header.scrollLeft = scrollLeft;
    }

    render() {
        const minWidthHeader = Object.keys(this.props.columns).reduce((width, columnKey) => {
            if (this.state.resizing && this.state.resizing.columnKey === columnKey) {
                width += this.state.resizing.width;
            }
            else {
                width += this.getColumnWidth(columnKey);
            }
            return width;
        }, 0);

        const minWidthBody = Object.keys(this.props.columns).reduce((width, columnKey) => {
            width += this.getColumnWidth(columnKey);
            return width;
        }, 0);

        return (
            <div
                className={style.InfiniteScrollTable}
                style={{
                    height: 500,
                }}
            >
                { this.renderHeader(minWidthHeader) }
                <InfiniteScroll
                    className={style.body}
                    hasMore={this.props.hasMore}
                    loadMore={this.props.loadMore}
                    onScroll={this.scrollHeader}
                >
                    { this.renderBody(minWidthBody) }
                </InfiniteScroll>
            </div>
        );
    }
}

export default InfiniteScrollTable;
