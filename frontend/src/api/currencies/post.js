/*
 * post.js
 * Copyright (c) 2022 fazilc.dev@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

import {api} from "boot/axios";

export default class Post {
  post(submission) {
    let url = '/api/v1/currencies';
    return api.post(url, submission);
  }
  makeDefault(currency) {
    let url = '/api/v1/currencies/' + currency + '/default';
    return api.post(url);
  }
}
