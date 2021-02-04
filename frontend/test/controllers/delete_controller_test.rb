require "test_helper"

class DeleteControllerTest < ActionDispatch::IntegrationTest
  test "should get show" do
    get delete_show_url
    assert_response :success
  end
end
